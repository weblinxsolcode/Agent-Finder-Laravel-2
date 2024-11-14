<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Agreement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    table,
    th,
    td {
        border: 1px solid #e7e7e7 !important;
    }
    
    body
    {
        font-family: "Plus Jakarta Sans", sans-serif !important;
    }

</style>

<body>
    <div class="container">
        <div class="step6sellbox1 mb-4">
            <div for="acceptTerms" class="forscroll">
                <h2>Agent Choice Referral Agreement</h2>
                <div class="mt-3">
                    <h3 class="fw-bold">Basis of Agreement</h3>
                    <p class="mb-0">Agent Choice is dedicated to offering a comprehensive website platform and facilitating referrals to real estate agents.</p>
                    <p class="mb-0">The Agent has agreed to pay Agent Choice for Completed Referrals in accordance with the Key Details and the terms and conditions on the following pages (which together form this “agreement”).</p>
                    <p class="mb-0">By clicking “Accept”, you acknowledge and agree to the Fees and Terms and the Agent Referral Agreement on this website.</p>
                    <p class="mb-0">Should you have any concerns or questions, please contact us on 1300 344 148 or email us at support@agentchoice.com.au.</p>
                    <p class="mb-0">The Website offers a feature that allows you to print or email a copy of the Agent Referral Agreement. We recommend that you retain a copy for your records.</p>

                    <div class="my-3">
                        <h3 class="fw-bold" style="color : #2E353C;">Key details</h3>
                        <div class="d-flex align-items-center gap-3 ">
                            Start Date: {{ $info->created_at->format("d M, Y") }}
                        </div>
                        <h2 class="my-3 fw-bold" style="color : #2E353C;">The Parties</h2>
                        <table>
                            <tr style="background-color: #F7F7F7; padding: 50px; color: #5F6571;">
                                <th style="padding: 5px;">What each party will be called in this agreement</th>
                                <th style="padding: 5px;">Full name & company</th>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 5px;">Agent</td>
                                <td style="border: 1px solid black; padding: 5px;">
                                    {{ $info->first_name ?? "First Name" }} {{ $info->last_name ?? "Last Name" }}, {{ $info->email }}
                                    <br>
                                    {{ $info->agency_name ?? "Agency Name" }} (ABN: {{ $info->agenct_code?? "ABN/ACN Code" }}) of {{ $info->agenct_address ?? "Agency Address" }}
                                </td>

                            </tr>
                            <tr style="border: 1px solid black">
                                <td style="padding: 5px;">Agent Choice</td>
                                <td style="padding: 5px;">
                                    Agent Choice The Trustee for the Agent Choice Unit Trust ABN 68 271The Trustee for the Agent Choice Unit Trust ABN 68 271 308, Suite 312, Level 3, 478
                                    <br>
                                    George Street, Sydney NSW 2000.
                                    <br>
                                    Email: support@agentchoice.com.au
                                </td>

                            </tr>
                        </table>
                        <h3 class="mt-3 fw-bold" style="color : #2E353C;">Commission</h3>
                        <table>
                            <tr>
                                <th style="background-color: #F7F7F7;padding: 7px; color : #2E353C;">Commission Percentage</th>
                                <th style="background-color: #F7F7F7;padding: 7px; color : #2E353C;">Due Date</th>
                                <th style="background-color: #F7F7F7;padding: 7px; color : #2E353C;">Referral Validity Period</th>
                                <th style="background-color: #F7F7F7;padding: 7px; color : #2E353C;">Payment method</th>
                            </tr>
                            <tr>
                                <td style="padding: 7px;">20% (plus GST)</td>
                                <td style="padding: 7px;">Within 3 business days of receiving the commission payable invoice.
                                </td>
                                <td style="padding: 7px;">Referral leads remain valid for a period of 12 months from the date
                                    of
                                    receipt</td>
                                <td style="padding: 7px;">Electronic Bank Transfer. To be Advised.</td>
                            </tr>
                        </table>
                    </div>

                    <h3 class="my-3">Terms and Conditions</h3>
                    <h4>1. HOW TO READ THIS AGREEMENT</h4>
                    <p>1.1 MEANING OF CAPITALISED WORDS AND PHRASES</p>
                    <p class="mb-0"> Capitalised words and phrases used in these terms and conditions have the meaning given: </p>
                    <p class="mb-0">(a) to that word or phrase in the Key Details;</p>
                    <p class="mb-0">(b) by the words immediately preceding any bolded and bracketed word(s) or phrase(s); or</p>
                    <p class="mb-0">(c) in the definitions in clause 17 of this agreement.</p>

                    <p>1.2 ORDER OF PRECEDENCE</p>
                    <p> Unless otherwise expressly stated, in the event of any inconsistency between
                        these
                        terms and conditions and the Key Details, these terms and conditions will
                        prevail to
                        the extent of such inconsistency.</p>

                    <h4>2. DURATION OF THIS AGREEMENT</h4>

                    <p>(a)This agreement will commence on the Start Date and continues until it is terminated in accordance with clause 2(b) or clause 14 (Term).</p>
                    <p>(b) The parties may agree to terminate this agreement by mutual agreement in writing.
                    </p>


                    <h4>3. INTRODUCTIONS AND REFERRALS </h4>
                    <p>3.1 DEFINITIONS</p>
                    <p>For the purposes of this clause 3 and the rest of this agreement, the following capitalised terms have the following meanings:</p>
                    <p>(a) “Authorised Representative” has the meaning given in clause 3.1(d)(i) below.</p>
                    <p>(b) “Completed Referral” means an Introduction between the Agent and an End Customer, performed by Agent Choice, which leads to the End Customer entering into an agreement with the Agent, and the Agent receives payment.</p>
                    <p>(c) “End Customer” means a strategic partner or a past, present or prospective customer of Agent Choice, or any other person Agent Choice may introduce to the Agent, but excluding:</p>
                    <p>(i) any person who is an existing customer of the Agent at the time of the Introduction of that person; and</p>
                    <p>(ii) any person that has been excluded by the Agent, by notice in writing to Agent Choice prior to the Introduction of that person.
                    </p>
                    <p>(d) “Introduction” means an introduction between an End Customer and the Agent, where the introduction:</p>
                    <p>(i) is to a representative of the End Customer with authority to purchase services from the Agent on behalf of the End Customer (Authorised Representative);</p>
                    <p>(ii) contains the name and contact details of the Authorised Representative; and
                    </p>
                    <p>(iii) contains a general indication of the types of services the End Customer requires.</p>

                    <p>3.2 INTRODUCTIONS</p>
                    <p>(a) Agent Choice may, but is under no obligation to, Introduce its clients, strategic partners and any other persons to the Agent.</p>
                    <p>(b) Agent Choice must provide the Agent with all information and assistance reasonably required by the Agent after an Introduction.</p>

                    <h4>4. RELATIONSHIP </h4>
                    <p>4.1 RELATIONSHIP </p>
                    <p> The relationship between the Agent and Agent Choice is of a principal and an independent contractor. Nothing in this agreement constitutes or deems Agent Choice to be an employee or the Agent of the Agent. Either party must not hold itself out as being entitled to contract or accept payment in the name of or on account of the other party.</p>
                    <p>4.2 NO EXCLUSIVITY</p>
                    <p>(a) This agreement is not a commitment by Agent Choice or the Agent to work exclusively with each other regarding referrals of work.</p>
                    <p>(b) Agent Choice is under no financial obligation to the Agent and is not required to refer work to the Agent.</p>
                    <p>4.3 AGENT OBLIGATIONS</p>
                    <p>(a) The Agent must act professionally, courteously, and with integrity in dealings with End Customers and with Agent Choice.</p>
                    <p>(b) The Agent must respond to leads diligently and make reasonable efforts to provide high levels of service to End Customers.</p>
                    <p>(c) The Agent must comply with all applicable laws related to the activities performed under this agreement, including maintaining a valid real estate agent licence and adhering to the Australian Privacy Principles.</p>
                    <h4>5. PAYMENT</h4>
                    <p>5.1 COMMISSION</p>
                    <p> If Agent Choice provides the Agent with a Completed Referral, the Agent will pay Agent Choice the Commission Percentage of the Agent’s relevant Agent Commission during the Commission Period (Commission), in the amounts and at the times set out in the Key Details, or as otherwise agreed in writing.</p>
                    <p>5.2 WAIVER OF COMMISSION</p>
                    <p>(a) Agent Choice may elect to Waive the Commission for a Completed Referral if, at the date the lead was sent to the Agent (Referral Date), either of the following conditions is met:</p>
                    <p>(i) Within 90 days before the Referral Date, the Agent had conducted a formal written appraisal of the End Customer's property, or has written evidence (such as CRM notes) that the Agent was already in discussions about the sale or rental of the property during this time; or</p>
                    <p>(ii) At the Referral Date, the Agent had a current Sale Authority, Letting Authority, or Property Management Agreement with the End Customer over the property being referred or any other property owned by the End Customer.</p>
                    <p>(b) To request a Waiver, the Agent must provide written notice to Agent Choice within 10 Business Days of the Referral Date, detailing the sale for which the Agent wishes to claim a Waiver and providing supporting evidence as required under this clause.
                    </p>
                    <p>(c) Upon receiving a request for a Waiver, Agent Choice will review the provided evidence and may request further information if needed. Agent Choice will make a determination as promptly as reasonably possible and notify the Agent of the outcome, which will be final and binding.</p>
                    <p>(d) The following scenarios, among others, will not justify a Waiver of the Commission:</p>
                    <p>(i) the Agent meets the lead at an open home;</p>
                    <p>(ii) the client states that Agent Choice had no involvement in the selection of the Agent;</p>
                    <p>(iii) the lead is already on the Agent’s database; or</p>
                    <p>(iv) the Agent is a friend or relative of the lead.</p>
                    <p>5.3 REPORTING REQUIREMENTS</p>
                    <p>(a) The Agent must promptly (within 2 Business Days) report to Agent Choice the occurrence of any of the following events:</p>
                    <p>(i) the signing of a contract for services with an End Customer referred by Agent Choice;</p>
                    <p>(ii) the signing of any agreement for the sale or rental of property for an End Customer provided by Agent Choice, along with the details required for processing the Commission;</p>
                    <p>(iii) when any agreement related to an End Customer becomes unconditional; and</p>
                    <p>(iv) any early payment of Commission to the Agent in respect of an End Customer.
                    </p>
                    <p>(b) If the Agent fails to notify Agent Choice in accordance with this clause, the Agent must pay to Agent Choice a penalty of $250 plus GST, representing a genuine pre-estimate of the loss or damage suffered by Agent Choice due to the failure to notify.</p>
                    <p>5.4 NO ADDITIONAL ENTITLEMENTS</p>
                    <p>(a) Agent Choice agrees that the Commission is the only fee or financial benefit that Agent Choice is entitled to in connection with the Completed Referral, and that no additional charges or entitlements will be made to or claimed by Agent Choice.
                    </p>
                    <p>(b) Agent Choice will not receive any Commission for Agent Commissions received by the Agent outside the Commission Period.</p>
                    <p>5.5 END CUSTOMER PAYMENTS</p>
                    <p>(a) Throughout the Commission Period, the Agent will notify Agent Choice when it receives a payment from an End Customer for which Commission is payable (Commission Notice), such notice to specify the amount of Commission owed to Agent Choice by the Agent in relation to the payment from an End Customer (Commission Payable).</span>.
                    </p>
                    <p>(b) Within 3 Business Days of receiving a Commission Notice, Agent Choice will issue a validly rendered tax invoice to the Agent in respect of the Commission Payable.
                    </p>
                    <p>(c) Provided that the Agent receives a valid invoice in accordance with clause 5.5(b), the Agent will pay the Commission Payable to Agent Choice:</p>
                    <p>(i) by the due date set out in the Commission Notice; or</p>

                    <p>4.3 AGENT OBLIGATIONS</p>

                    <p>(ii) if no due date is set out in a Commission Notice, then within 30 days of the Commission Notice’s date of issue.</p>
                    <p>5.6 GST</p>
                    <p>(a) Unless otherwise indicated, amounts stated in the Key Details do not include GST.
                    </p>
                    <p>(b) If GST is or becomes payable on a Supply made under or in connection with this agreement, an additional amount is payable by the party providing consideration for the Supply equal to the amount of GST payable on that Supply as calculated by the party making the Supply in accordance with A New Tax System (Goods and Transitional Business Continuity Services Tax) Act 1999 (Cth) (GST Act).</p>
                    <p>5.7 PAYMENT METHOD </p>
                    <p>The Agent will pay the Commission in accordance with the payment method set out in the Key Details.</p>
                    <p>5.8 NON-TRANSFERABILITY OF REFERRAL FEE</p>
                    <p>(a) The Agent agrees that under no circumstances will the referral fee paid to Agent Choice pursuant to this agreement be passed on, directly or indirectly, to any End Customer or client. the Agent acknowledges that the referral fee is an exclusive arrangement between the Agent and Agent Choice, and the End Customer or client shall not be burdened with any costs associated with this referral fee.</p>
                    <p>(b) If the Agent is found to have passed on the referral fee to an End Customer or client, Agent Choice reserves the right to terminate this agreement immediately and seek reimbursement of the referral fee, along with any additional costs incurred due to the breach.</p>
                    <h4>6. CONFIDENTIALITY</h4>
                    <p>6.1 CONFIDENTIAL INFORMATION</p>
                    <p> The parties will not, during, or at any time after, the Term, disclose Confidential Information directly or indirectly to any third party, except:</p>
                    <p>(a) with the other party’s prior written consent;</p>
                    <p>(b) as required by Law; or</p>
                    <p>(c) to their Personnel on a need to know basis for the purposes of performing its obligations under this agreement (Additional Disclosees).</p>
                    <p>6.2 BREACH</p>
                    <p> If either party becomes aware of a suspected or actual breach of clause 6.1 by that party or an Additional Disclosee, that party will immediately notify the other party and take reasonable steps required to prevent, stop or mitigate the suspected or actual breach. The parties agree that damages may not be a sufficient remedy for a breach of clause 6.1.</p>
                    <p>6.3 PERMITTED USE</p>
                    <p>A party may only use the Confidential Information of the other party for the purposes of exercising its rights or performing its obligations under this agreement.</p>
                    <p>6.4 RETURN</p>
                    <p>On termination or expiration of this agreement, each party must immediately return to the other party, or (if requested by the other party) destroy, any documents or other Material in its possession or control containing Confidential Information of the other party.</p>
                    <p>6.5 ADDITIONAL DISCLOSEES</p>
                    <p>Each party will ensure that Additional Disclosees keep the Confidential Information confidential on the terms provided in this clause 6. Each party will, when requested by the other party, arrange for an Additional Disclosee to execute a document in a form reasonably required by the other party to protect Confidential Information.
                    </p>
                    <h4>7. INTELLECTUAL PROPERTY</h4>
                    <p>7.1 EXISTING MATERIAL</p>
                    <p> Except to the extent otherwise stated in the Key Details or in this clause 7:
                    </p>
                    <p>(a) each party retains ownership of the Intellectual Property Rights in its Existing Material; and</p>
                    <p>(b) nothing in this agreement transfers ownership of, or assigns any Intellectual Property Rights in, either party’s Existing Material to the other party.</p>
                    <p>7.2 TRADE MARKS</p>
                    <p> Each party (First Party) grants the other party a non-exclusive, non-transferable, royalty-free licence for the Term to use the First Party’s name and trade marks notified to the other party from time to time solely for the purposes of making general public statements about the referral relationship between the parties, including in any proposal, promotional material, and press release, provided no commercially sensitive information is used or disclosed.</p>
                    <p>8. REPORTING REQUIREMENTS</p>
                    <p> Upon request by Agent Choice, the Agent must provide a copy of their agreement with the End Customer, including any amendments or variations to such agreements, within 10 Business Days of receiving the request.</p>
                    <p>9. VERIFICATION OF REPORTS</p>
                    <p>(a) Agent Choice reserves the right to verify the reports (Agency Agreement) provided by the Agent under this agreement. Such verification may include, but is not limited to, requesting additional documentation or seeking confirmation from the End Customer.</p>
                    <p>(b) The Agent must cooperate fully with Agent Choice in the verification process, providing all necessary documentation and information within a reasonable timeframe as specified by Agent Choice.</p>
                    <p>(c) If any discrepancies or inaccuracies are found in the reports provided by the Agent, the Agent must correct such discrepancies and provide revised reports to Agent Choice within 3 Business Days of being notified.</p>
                    <h4>10. NO GUARANTEE OF ADVERTISING</h4>
                    <p>(a) Agent Choice makes no guarantees, representations, or warranties that it will advertise or promote the Agent's services or agency in any form.</p>
                    <p>(b) Any promotional activities undertaken by Agent Choice will be at its sole discretion, and the Agent acknowledges that Agent Choice is under no obligation to carry out any such activities.</p>
                    <h4>11. LIMITATION OF LIABILITY</h4>
                    <p>11.1 LIABILITY</p>
                    <p>(a) To the maximum extent permitted by law, the total liability of each party in respect of loss or damage sustained by the other party in connection with this agreement is limited to the amount paid by the Agent to Agent Choice in the 3 months preceding the date of the event giving rise to the relevant liability.</p>
                    <p>(b) Agent Choice shall not be liable to the Agent for:</p>
                    <p>(i) any hacking, interception, or other breach of security by a third party affecting data related to this Agreement;</p>
                    <p>(ii) any interruption to the operation of Agent Choice’s services for any reason whatsoever; or</p>
                    <p>(iii) any loss or claim relating to the accuracy of information provided by End Customers or third-party data suppliers.</p>
                    <p>11.2 CONSEQUENTIAL LOSS</p>
                    <p>To the maximum extent permitted by law, neither party will be liable for any incidental, special or consequential loss or damages, or damages for loss of data, business or business opportunity, goodwill, anticipated savings, profits or revenue in connection with this agreement or any Introductions, except:</p>
                    <p>(a) in relation to a party’s liability for fraud, personal injury, death or loss or damage to tangible property; or</p>
                    <p>(b) to the extent this liability cannot be excluded under the Competition and Consumer Act 2010 (Cth).</p>
                    <h4>12. PRIVACY</h4>
                    <p>In providing Introductions to the Agent, Agent Choice agrees to comply with:</p>
                    <p>(a) the Australian Privacy Principles set out in the Privacy Act 1988 (Cth); and
                    </p>
                    <p>(b) any other applicable Laws or privacy guidelines.</p>
                    <h4>13. DISPUTE RESOLUTION</h4>
                    <p>(a) A party claiming that a dispute has arisen under or in connection with this agreement must not commence court proceedings arising from or relating to the dispute, other than a claim for urgent interlocutory relief, unless that party has complied with the requirements of this clause.</p>
                    <p>(b) A party that requires resolution of a dispute which arises under or in connection with this agreement must give the other party or parties to the dispute written notice containing reasonable details of the dispute and requiring its resolution under this clause.</p>
                    <p>(c) Once the dispute notice has been given, each party to the dispute must then use its best efforts to resolve the dispute in good faith. If the dispute is not resolved within a period of 14 days (or such other period as agreed by the parties in writing) after the date of the notice, any party to the dispute may take legal proceedings to resolve the dispute.</p>
                    <p>14. TERMINATION</p>
                    <p>14.1 TERMINATION FOR CONVENIENCE</p>
                    <p>Either party may terminate this agreement for convenience by providing 20 Business Days’ notice to the other party.</p>
                    <p>14.2 TERMINATION FOR BREACH</p>
                    <p>14.2 TERMINATION FOR BREACH</p>
                    <p>(b) A “Breach” of this agreement means:</p>
                    <p>(i) a party (Notifying Party) considers the other party is in breach of this agreement and notifies the other party;</p>
                    <p>(ii) the other party is given 10 Business Days to rectify the breach; and</p>
                    <p>(iii) the breach has not been rectified within 10 Business Days or another period agreed between the parties in writing.</p>
                    <p>14.3 EFFECT OF TERMINATION</p>
                    <p>Upon termination of this agreement,:</p>
                    <p>(a) the Agent will pay all amounts owed to Agent Choice as at the date of termination;</p>
                    <p>(b) each party must return all property and Confidential Information to the other party;</p>
                    <p>(c) each party must stop using any materials that are no longer owned by, or licensed to, them when this agreement is terminated; and </p>
                    <p>(d) each party must comply with all obligations that are by their nature intended to survive the end of this agreement, including without limitation clauses 3, 4, 6, 7, 8, 13 and 14.</p>
                    <h4>15. NOTICES</h4>
                    <p>(a) A notice or other communication to a party under this agreement must be:</p>
                    <p>(i) in writing and in English; and</p>
                    <p>(ii) delivered via email to the other party, to the email address specified in this agreement, or if no email address is specified in this agreement, then the email address most regularly used by the parties to correspond regarding the subject matter of this agreement as at the date of this agreement (Email Address). The parties may update their Email Address by notice to the other party.</p>
                    <p>(b) Unless the party sending the notice knows or reasonably ought to suspect that an email was not delivered to the other party’s Email Address, notice will be taken to be given:</p>
                    <p>(i) 24 hours after the email was sent, unless that falls on a Saturday, Sunday or a public holiday in the state or territory whose laws govern this agreement, in which case the notice will be taken to be given on the next occurring business day in that state or territory; or</p>
                    <p>(ii) when replied to by the other party,</p>
                    <p>whichever is earlier.</p>
                    <h4>16. GENERAL</h4>
                    <p>16.1 GOVERNING LAW AND JURISDICTION</p>
                    <p>This agreement is governed by the law applying in the New South Wales, Australia. Each party irrevocably submits to the exclusive jurisdiction of the courts of New South Wales, Australia and courts of appeal from them in respect of any proceedings arising out of or in connection with this agreement. Each party irrevocably waives any objection to the venue of any legal process on the basis that the process has been brought in an inconvenient forum.</p>
                    <p>16.2 BUSINESS DAYS</p>
                    <p>If the day on which any act is to be done under this agreement is a day other than a Business Day, that act must be done on or by the immediately following Business Day except where this agreement expressly specifies otherwise.</p>
                    <p>16.3 AMENDMENTS</p>
                    <p>16.3 AMENDMENTS</p>
                    <p>16.4 WAIVER</p>
                    <p>No party to this agreement may rely on the words or conduct of any other party as a waiver of any right unless the waiver is in writing and signed by the party granting the waiver.</p>
                    <p>16.5 SEVERANCE</p>
                    <p>Any term of this agreement which is wholly or partially void or unenforceable is severed to the extent that it is void or unenforceable. The validity and enforceability of the remainder of this agreement is not limited or otherwise affected.</p>
                    <p>16.6 JOINT AND SEVERAL LIABILITY</p>
                    <p>An obligation or a liability assumed by, or a right conferred on, two or more persons binds or benefits them jointly and severally.</p>
                    <p>16.7 ASSIGNMENT</p>
                    <p>A party cannot assign, novate or otherwise transfer any of its rights or obligations under this agreement without the prior written consent of the other party.</p>
                    <p>16.8 COSTS</p>
                    <p>Except as otherwise provided in this agreement, each party must pay its own costs and expenses in connection with negotiating, preparing, executing and performing this agreement.</p>
                    <p>16.9 ENTIRE AGREEMENT</p>
                    <p>This agreement embodies the entire agreement between the parties and supersedes any prior negotiation, conduct, arrangement, understanding or agreement, express or implied, in relation to the subject matter of this agreement.</p>
                    <p>16.10 INTERPRETATION</p>
                    <p>(a) (singular and plural) words in the singular includes the plural (and vice versa);</p>
                    <p>4.3 (b) (gender) words indicating a gender includes the corresponding words of any other gender;</p>
                    <p>(c) (defined terms) if a word or phrase is given a defined meaning, any other part of speech or grammatical form of that word or phrase has a corresponding meaning;</p>
                    <p>(d) (person) a reference to “person” or “you” includes an individual, the estate of an individual, a corporation, an authority, an association, consortium or joint venture (whether incorporated or unincorporated), a partnership, a trust and any other entity;</p>
                    <p>(e) (party) a reference to a party includes that party’s executors, administrators, successors and permitted assigns, including persons taking by way of novation and, in the case of a trustee, includes any substituted or additional trustee;</p>
                    <p>(e) (party) a reference to a party includes that party’s executors, administrators, successors and permitted assigns, including persons taking by way of novation and, in the case of a trustee, includes any substituted or additional trustee;</p>
                    <p>(f) (this agreement) a reference to a party, clause, paragraph, schedule, exhibit, attachment or annexure is a reference to a party, clause, paragraph, schedule, exhibit, attachment or annexure to or of this agreement, and a reference to this agreement includes all schedules, exhibits, attachments and annexures to it;</p>
                    <p>(g) (document) a reference to a document (including this agreement) is to that document as varied, novated, ratified or replaced from time to time;</p>
                    <p>(h) (headings) headings and words in bold type are for convenience only and do not affect interpretation;</p>
                    <p>(i) (includes) the word “includes” and similar words in any form is not a word of limitation;</p>
                    <p>(j) (adverse interpretation) no provision of this agreement will be interpreted adversely to a party because that party was responsible for the preparation of this agreement or that provision; and</p>
                    <p>(k) (currency) a reference to $, or “dollar”, is to Australian currency, unless otherwise agreed in writing.</p>
                    <h4>17. DEFINITIONS</h4>
                    <p>In these terms and conditions, the following words and phrases have the following meaning:</p>
                    <table style="width:100%;">
                        <thead>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top; background-color:#F7F7F7;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt; color:#5F6571;"><strong>Term</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#F7F7F7;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt; color:#5F6571;"><strong>Meaning</strong></p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Additional Disclosees</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 6.1.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Agent Commission</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">The total value of the commission received by the Agent for their services provided to the End Customer being the subject of the relevant Completed Referral.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Authorised Representative</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 3.1.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Business Day</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">A day (other than a Saturday, Sunday or any other day which is a public holiday) on which banks are open for general business in Sydney, New South Wales.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Commission</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 5.1.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Commission Notice</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 5.5.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Commission Payable</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 5.5(a)</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Commission Percentage</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in the Key Details.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Commission Period</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in the Key Details.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Completed Referral</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 3.1.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Confidential Information</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Information of, or provided by, a party that is by its nature confidential information, is designated as confidential, or that the recipient of the information knows or ought to know is confidential (including all commercial information exchanged between the parties), but does not include information which is, or becomes, without a breach of confidentiality, public knowledge.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>End Customer</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 3.1.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Existing Material</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">The Material of either party.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>GST Act</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 5.6(b).</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Intellectual Property Rights</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">All copyright, trade mark, design, patent, semiconductor and circuit layout rights, trade, business, company and domain names, confidential and other proprietary rights, and any other rights to registration of such rights whether created before or after the date of this agreement both in Australia and throughout the world.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Introduction</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 3.1.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Laws</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Any applicable statute, regulation, by-law, ordinance or subordinate legislation in force from time to time in Australia, or any other relevant jurisdiction(s), and including any industry codes of conduct.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Material</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Tangible and intangible information, documents, reports, software (including source and object code), inventions, data and other materials in any media whatsoever.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Personnel</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Employees, secondees, the Agents and subcontractors (who are individuals), including employees and contractors (who are individuals) of subcontractors.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:122.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; vertical-align:top;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;"><strong>Term</strong></p>
                                </td>
                                <td style="width:311.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; padding: 8px;">
                                    <p style="margin-top:4pt; margin-bottom:4pt; font-size:10pt;">Has the meaning given in clause 2(a).</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
